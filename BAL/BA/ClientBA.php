<?php
/**
 * Class ClientBA
 */
class ClientBA extends BaseBA
{
    /*
     * @var ClientDA
     */
    private $cda;
    /*
     * @var UserDA
     */
    private $uda;

    /*
     * ClientBA constructor
     */
    public function __construct()
    {
        $this->cda = new ClientDA();
        $this->uda = new UserDA();

    }

    /*
     * ClientAddDTO
     * return strung
     */
    public function AddClient(ClientAddDTO $client)
    {
        try {
            $client->userID = $this->uda->AddUser($client);
            $client->Address = $this->uda->AddAddress($client);
            $client->ClientID = $this->cda->AddClient($client);

            return $client->ClientID;
        } catch (PDOException $pex) {
            throw new PDOException($pex);
        }

    }
    /**
     * @param $clientId
     * @return array
     */
    public function GetClient($clientId)
    {
        return $this->cda->GetClient($clientId);
    }
    /*
     * @param $userId
     * @return array
     */
    public function GetClientByUserId($UserId)
    {
        return $this->cda->GetClientByUserId($UserId);
    }
    /*
     * @return array
     **/
    public function GetClients()
    {
        return $this->cda->GetClients();
    }
    /**
     * @param $userTypeCode
     * @return null|string
     */
    public function GetUserType($userTypeCode)
    {
        try
        {
            return $this->uda->GetUserType($userTypeCode);
        }
        catch (PDOException $pex)
        {
            throw new PDOException($pex);
        }
    }
    public function AddUser(ClientAddDTO $user)
    {
        try
        {
            return $this->uda->AddUser($user);
        }
        catch (PDOException $pex)
        {
            throw new PDOException($pex);
        }
    }
}
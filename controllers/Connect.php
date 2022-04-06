<?

class Connect
{
    private $host = "localhost";
    private $db_name = "annonces";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch (PDOException $exception) {
            "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
$connect = new Connect();
$db = $connect->getConnection();

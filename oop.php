<?php 

class User {
    private $fName;
    private $lName;
    private $usrname;
    private $email;
    private $phone;
    
    // Constructor (must be named __construct)
    public function __construct($usrname, $email) {
        $this->usrname = $usrname;
        $this->email = $email;
        echo("new ".__CLASS__." constructed with <br> Username: $usrname <br>Email: $email <br>");
    }

    // G/Setters
    public function set_fName($fName) {
        $this->fName = $fName."<br>";
    }

    public function get_fName() {
        return $this->fName."<br>";
    }

    public function set_lName($lName) {
        $this->lName = $lName."<br>";
    }

    public function get_lName() {
        return $this->lName."<br>";
    }

    public function set_email($email) {
        $this->email = $email."<br>";
    }

    public function get_email() {
        return $this->email."<br>";
    }

    public function set_phone($phone) {
        $this->phone = $phone."<br>";
    }

    public function get_phone() {
        return $this->phone."<br>";
    }

    public function set_usrname($usrname) {
        $this->usrname = $usrname."<br>";
    }

    public function get_usrname() {
        return $this->usrname."<br>";
    }

    public function toString() {        
        return ("<br>username: ".$this->usrname."<br>"."First Name: ".$this->fName."<br>"."Last Name: ".$this->lName."<br>"."Email: ".$this->email."<br>"."Phone: ".$this->phone."<br>");
    }

}

$usr1 = new User("dayodele", "dayodele@email.com");

echo $usr1->get_email()."<br>";
echo $usr1->toString();
$usr1->set_fName("David");
$usr1->set_lName("Ayodele");
$usr1->set_phone("(555)555-5555");
$usr1->set_email("test@test.com");

echo $usr1->toString();
?>
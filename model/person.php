<?php 
//comment
class Person {
    private string $code;
    private string $name;
    private string $phone;
    private string $email;
    private string $address;

    public function __construct(
        string $code,
        string $name,
        string $phone,
        string $email,
        string $address
        )
    {
        $this->code = $code; 
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
    }

    public function getCode(){
        return $this->code;
    }
    public function setCode(string $code){
        return $this->code = $code;
    }

}

?>
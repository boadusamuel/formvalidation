<?php

class Registerform
{

    private string $fullname;
    private string $email;
    private string $address;
    private string $gender;
    private string $username;
    private string $activegender;

    public function inactivegender($gender)
    {

        if ($gender === "Male") {
            return "Female";
        }

        return "Male";
    }


    public function renderForm(string $fullname = "", string $email = "", string $address = "", string $gender = "", string $username = "")
    {
        $this->fullname   = $fullname;
        $this->email  =     $email;
        $this->address  =  $address;
        $this->gender  =  $gender;
        $this->username  = $username;

        $this->activegender = $this->gender === "" ? ' 
                             <option value="">Gender</option> 
                            <option value="Male">Male</option>
                             <option value="Female">Female</option>
                            ' : ' <option value="' . $this->gender . '"> ' . $this->gender . '                             </option> 
                            <option value="' . $this->inactivegender($this->gender) . '"> ' . $this->inactivegender($this->gender) . '</option>  
                            <option value="">Gender</option>                              
                             ';

        echo ' <div class="row mt-2">
            <div class="col-md-4 offset-md-4 mt-5">
                <form action="process.php" method="POST" class="mt-5">
                    <h2 class="text-center font-weight-bold my-3">Registration Form</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full Name" name="fullname" value="' . $this->fullname . '">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="' . $this->email . '">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address" name="address" value="' . $this->address . '">
                    </div>
                    <div class="form-group">
                        <select name="gender" id="" class="form-control">
                       
                        ' . $this->activegender . '
                        
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username" value="' . $this->username . '">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="password" name="password" value="">
                    </div>
                    <div class="form-group">

                        <input type="submit" class="form-control btn-primary font-weight-bold" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div> ';
    }
}

<?php
class userInfo {
    public function __construct($name, $currentPsw, $newPsw, $fMembers) {
        $this->setInfo($name, $currentPsw, $newPsw, $fMembers);
    }
    public $userName;
    public $currentPassword;
    public $newPassword;
    public $familyMembers;

    public function setInfo($name, $currentPsw, $newPsw, $fMembers) {
        $this->userName = $name;
        $this->currentPassword = $currentPsw;
        $this->newPassword = $newPsw;
        $this->familyMembers = $fMembers; // Assign the array directly
    }

    public function getCurrentInfo() {
        echo "Your username is " . $this->userName . ".<br>";
        echo "Your current password is " . $this->currentPassword . " and your new password is " . $this->newPassword . ".<br>";

        foreach ($this->familyMembers as $member) {
            $totalMembers = count($this->familyMembers);
            if ($member == $this->familyMembers[$totalMembers - 1]) {
                echo $member . ".<br>";
            } else {
                echo $member . ", ";
            }
        }
    }
}

$user1 = new userInfo("Ali", "abc1234", "bcd1234", ["Peter", "Abu", "QiQi"]);
$user1->getCurrentInfo();

$user2 = new userInfo("Xiaobao", "abc9999", "bcd7788", ["BinBin", "JK", "Bumber killer"]);
$user2->getCurrentInfo();
?>
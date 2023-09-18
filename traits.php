<?php
//

trait hello
{
    public function sayhello()
    {
        echo "hello everyone.....<br>";
    }

    public function sayhiiii()
    {
        echo "<br>hiiiiii everyone......<br>";
    }
}
trait bye
{
    public function saybye()
    {
        echo "<br>good bye....<br>";
    }
}
class class1{
    use hello , bye;
}

class class2{
    use hello ,bye;
}

$traits = new class1();
$traits ->sayhello();

$traits2 = new class2();
$traits2 ->saybye();
$traits2 ->sayhiiii();
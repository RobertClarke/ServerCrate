yum install perl -y
cd
wget http://prdownloads.sourceforge.net/webadmin/webmin-1.580-1.noarch.rpm
rpm -U webmin-1.580-1.noarch.rpm
sudo iptables -I INPUT 4 -m state --state NEW -m tcp -p tcp --dport 10000 -j ACCEPT
sudo service iptables save
echo
echo
echo =======================
echo All done, enjoy webmin.
echo http://servercrate.com
echo =======================
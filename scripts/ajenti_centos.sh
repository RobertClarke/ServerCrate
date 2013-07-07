yum update -y
cd /etc/yum.repos.d/
wget http://servercrate.com/scripts/ajenti/ajenti.repo
cd /
yum update -y
yum install ajenti -y
echo
echo
echo =======================
echo All done, enjoy Ajenti.
echo http://servercrate.com
echo =======================
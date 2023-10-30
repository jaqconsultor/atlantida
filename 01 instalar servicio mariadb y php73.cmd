C:\atlantida\recursos\nssm\win32\nssm.exe install atlantidac_MariaDB "C:\atlantida\mariadb-10.2.37-win32\bin\mysqld.exe" " --defaults-file=C:\atlantida\mariadb-10.2.37-win32\my.ini"
C:\atlantida\recursos\nssm\win32\nssm.exe install atlantidac_PHP73 "C:\atlantida\php73\php.exe" "-S localhost:8383 -t C:\atlantida\htdocs73\"

net start atlantidac_MariaDB
net start atlantidac_PHP73
pause
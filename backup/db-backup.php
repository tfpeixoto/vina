<?php
$host = 'mysql873.umbler.com';
$username = 'user_vinaec';
$password = 'Yr]y76r[Vf';
$database = 'db_vinaec';

// Database config
$backupDir = '/public/backup';
$backupFile = $backupDir . '/' . $database . '_' . date('Ymd_His') . '.sql';

// Comando para fazer o dump do banco de dados
$command = "mysqldump --opt --host={$host} --user={$username} --password={$password} {$database} > {$backupFile}";
system($command, $output);

// Output
if ($output === 0) {
  echo "Backup realizado com sucesso. O arquivo foi salvo em: {$backupFile}";
} else {
  echo "Houve um erro ao realizar o backup.";
}

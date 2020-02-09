#A hello world ps script, if error received run: Set-ExecutionPolicy RemoteSigned

#$fName = $args[0]
#$lName = $args[1]
param($fName, $lName)

Write-Host "Hello $fName $lName"
Write-Host "You are logged in as $env:COMPUTERNAME"
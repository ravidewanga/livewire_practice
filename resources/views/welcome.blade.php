<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    @livewireStyles
<body>

    @livewire('wallet.add-amount')
    <p>--------------profile---------------</p>
    @livewire('profile')

    <p>--------------users for nested components---------------</p>
    @livewire('users')    

    @livewireScripts
</body>
</html>
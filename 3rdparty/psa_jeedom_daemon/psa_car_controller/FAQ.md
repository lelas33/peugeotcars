# FAQ 
## Frequent error
### 1. Can't get car model
The car model need to be known by the app. To find it, the app use the first 10 character of your VIN.
If the car isn't in the list we need to add it, to do so you have two options:
- If you have the skills :
    
  You can add your car to the list yourself to do so look at [this example](https://github.com/flobz/psa_car_controller/pull/112/commits/e7304ef8f4e4a4498f202a7a4a7bbe451fbfe977). 
  Don't forget to do a pull request with your changes.


- If you don't: 
  
    Open an issue with [this template](https://github.com/flobz/psa_car_controller/issues/new?assignees=&labels=Car_model&template=can-t-get-car-model.md&title=%5BNew+Car+model%5D+my+model)


### 2. Error during activation {'newversion': '2.0.0', 'newversionurl': 'http://m.inwebo.com/', 'err': 'NOK:FORBIDDEN'}
Your psa account is locked because you makes 20 sms activation. To unlock do this : 
1. Install on a smartphone mypeugeot, myopel etc, depending on your car brand
2. If the application is already installed uninstall and reinstall
3. You should be asked to give your credentials
4. Connect and test remote control, it should say that you need to reset your account
6. If the remote control work on your smartphone it will work with psa_car_controller

### 3. No data to show
The app record your position if "-r" argument is provided.
You need to make few trips to be able to see stats in the dashboard.

### 4. Permission error
It's happen if config file aren't writable by the user that launch the process.
To fix this go to the application directory and execute this command :
```
# if the user is launched by pi user do
sudo chown pi: -R . 
```

### 5. I doesn't receive SMS
The SMS authentication is used to be able to remote control your car.
 If your car doesn't have this functionality you should disable remote control when you start psa-car-controller 
by using `--remote-disable` argument.

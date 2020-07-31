# ESP8266 Micropython email notification

Building basic email notification system for esp8266 boards.

## Getting Started

Clone this repository

```
git clone https://github.com/nenadfilipovic/esp8266-micropython-email-notification
```

### Prerequisites

For this to work you will need to download micropython image from http://micropython.org/download and flash it to esp8266 board.
You will also need esptool to be able to flash image to board.

### Installing

First install esptool form pip.

```
pip install esptool
```

Then erase your esp8266 board.
Which port you use depends what operating system you are using.

```
MAC OS - esptool.py --port /dev/ttyUSB0 erase_flash
```

or

```
WINDOWS OS - esptool.py --port COM4 erase_flash
```

After you connect board to PC go to 'Device Manager' and under 'Ports' find at which port is your board connected.

If there is no device connected you need to install serial drivers from

https://sparks.gogo.co.nz/assets/_site_/downloads/CH34x_Install_Windows_v3_4.zip.

Then you will be able to deploy firmware to esp8266 board.

```
esptool.py -p COM4 --baud 460800 write_flash --flash_size=detect 0 /Users/You/Downloads/esp8266–20170612-v1.9.1.bin
```

Now connect to your esp8266 board with Putty or some other terminal program and check if board greets you with micropython terminal.

## Running the tests

Check your email for result.
In this form script can send product name, version, and link to repository but you can expand it to whatever you want.

### Break down into end to end tests

-

### And coding style tests

-

## Deployment

Edit send_mail.php and put target email address.
Upload send_mail.php to your hosting.
Edit main.py in main folder and put path to php file and wifi ssid and password.

Upload main folder and main.py file to your esp8266 board.

## Built With

* [MicroPython](http://micropython.org/download) - Language used

## Authors

* **Nenad Filipovic** - *Initial work* - [nenadfilipovic](https://github.com/nenadfilipovic)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

-
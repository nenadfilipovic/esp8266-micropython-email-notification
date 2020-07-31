import urequests
import network

# Connect to wifi
station_mode = network.WLAN(network.STA_IF)
ap_mode = network.WLAN(network.AP_IF)
# Disable access point
ap_mode.active(False)
# Connect to selected network
if not station_mode.isconnected():
    print("Connecting to network...")
    station_mode.active(True)
    station_mode.connect('ssid', 'password')
    while not station_mode.isconnected():
        pass
# Print ip address and other data after connecting to network
print("Network config:", station_mode.ifconfig())
# Send data to php file
url = "url"
version = 1.2
name = "app.name"
link = "app.link"
response = urequests.post(url, json={"version": version, "name": name, "link": link})

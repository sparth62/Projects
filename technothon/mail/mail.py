import pandas as pd
import csv
import time
from selenium import webdriver
driver = webdriver.Chrome('g:/bot/chromedriver')
driver.get(r'https://mail.google.com/')
input()
s=""
with open('email.csv', 'r') as csvfile:
	spamreader = csv.reader(csvfile, delimiter=',')
	for row in spamreader:
		i=str(row[0])
		s=s+i+","
to=driver.find_element_by_name('to')
to.send_keys(s)
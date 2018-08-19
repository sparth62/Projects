from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import Select
from selenium.common.exceptions import NoSuchElementException
from selenium.common.exceptions import NoAlertPresentException
import unittest, time, re

driver = webdriver.Chrome('g:/bot/chromedriver')
driver.get("https://docs.google.com/forms/d/e/1FAIpQLSeBQDbKDvR96k2M9sjbYRmARVzIvTKgCyQoaA2SmYwRg70I-A/viewform?c=0&w=1")
for j in range(15,51):
    if(j<10):
        i="0"+str(j)
    else:
        i=str(j)
    driver.find_element_by_name("entry.1796277127").click()
    driver.find_element_by_name("entry.1796277127").clear()
    k="Testing"+i+" Shinojiya"
    driver.find_element_by_name("entry.1796277127").send_keys(k)
    time.sleep(1)
    driver.find_element_by_name("entry.700270698").click()
    driver.find_element_by_xpath("(.//*[normalize-space(text()) and normalize-space(.)='*'])[3]/following::div[5]").click()
    driver.find_element_by_name("entry.700270698").clear()
    k="19it0"+i
    print(k)
    driver.find_element_by_name("entry.700270698").send_keys(k)
    time.sleep(3)
    driver.find_element_by_xpath("(.//*[normalize-space(text()) and normalize-space(.)='*'])[4]/following::div[28]").click()
    driver.find_element_by_name("entry.118578826").click()
    driver.find_element_by_name("entry.118578826").clear()
    k="testing"+i+"@gmail.com"
    driver.find_element_by_name("entry.118578826").send_keys(k)
    time.sleep(1)
    driver.find_element_by_name("entry.1418713361").click()
    driver.find_element_by_name("entry.1418713361").clear()
    driver.find_element_by_name("entry.1418713361").send_keys("9104399919")
    time.sleep(1)
    driver.find_element_by_xpath("(.//*[normalize-space(text()) and normalize-space(.)='To confirm your registration kindly visit IT department.'])[1]/following::span[1]").click()
    driver.find_element_by_link_text("Submit another response").click()
    time.sleep(1)
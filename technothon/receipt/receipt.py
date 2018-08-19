from selenium import webdriver
import pandas as pd
import csv
import time
driver = webdriver.Chrome('g:/bot/chromedriver')
driver.get(r'C:\wamp64\www\technothon\receipt\receipt.html')
input()
with open('e_info.csv', 'r') as csvfile:
	spamreader = csv.reader(csvfile, delimiter=',')
	for row in spamreader:
		name={row[1]}
		name=str(name)
		name=name[2:-2]
		sname=driver.find_element_by_name('name')
		sname.send_keys(name)
		roll={row[0]}
		roll=str(roll)
		roll=roll[2:-2]
		sroll=driver.find_element_by_name('rollno')
		sroll.send_keys(roll)

		branch={row[2]}
		branch=str(branch)
		branch=branch[2:-2]
		sem={row[3]}
		sem=str(sem)
		sem=sem[2:-2]
		sem=sem+"/"+branch
		ssem=driver.find_element_by_name('sem')
		ssem.send_keys(sem)
		
		event=""
		lan={row[4]}
		lan=str(lan)
		lan=lan[2:-2]
		if(lan=='yes'):
			id_={row[5]}
			id_=str(id_)
			id_=id_[2:-2]
			lan="lan("+id_+") ,"
			event=event+lan
		poster={row[6]}
		poster=str(poster)
		poster=poster[2:-2]
		if(poster=='yes'):
			id_={row[7]}
			id_=str(id_)
			id_=id_[2:-2]
			poster="poster("+id_+"), "
			event=event+poster
		code={row[8]}
		code=str(code)
		code=code[2:-2]
		if(code=='yes'):
			code="code, "
			event=event+code
		web={row[9]}
		web=str(web)
		web=web[2:-2]
		if(web=='yes'):
			web="web, "
			event=event+web
		pic={row[10]}
		pic=str(pic)
		pic=pic[2:-2]
		if(pic=='yes'):
			id_={row[11]}
			id_=str(id_)
			id_=id_[2:-2]
			pic="pic("+id_+"), "
			event=event+pic
		video={row[12]}
		video=str(video)
		video=video[2:-2]
		if(video=='yes'):
			id_={row[13]}
			id_=str(id_)
			id_=id_[2:-2]
			video="video("+id_+"), "
			event=event+video
		selfie={row[14]}
		selfie=str(selfie)
		selfie=selfie[2:-2]
		if(selfie=='yes'):
			selfie="selfie, "
			event=event+selfie		
		sevent=driver.find_element_by_name('event')
		sevent.send_keys(event)
		
		header=driver.find_element_by_name('header')
		header.click()
		
		time.sleep(0.5)
		driver.save_screenshot(str(roll)+".png")
		sname.clear()
		sroll.clear()
		ssem.clear()
		sevent.clear()

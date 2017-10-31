import os
import time
import requests
import pymysql
from bs4 import BeautifulSoup
from selenium import webdriver

os.environ["PATH"] += ":/usr/local/bin/"
driver = webdriver.Chrome()
driver.get("https://www.codacy.com/app/levi.moraesds/SeboMedicao/dashboard")
# time.sleep(3)
soup = BeautifulSoup(driver.page_source, "html.parser")
driver.close()

file = open("metricasCodacy.txt","w") 

#Duplicacao de Codigo
#print(soup.select('a[href="/component_measures/metric/duplicated_lines_density?id=org.sonarqube%3Ajava-simple-sq-scanner"]'))
# file.write("version=")
soup.find_all("h6")




file.close() 
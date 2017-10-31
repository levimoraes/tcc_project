import os
import time
import requests
import pymysql
import re
import json
from bs4 import BeautifulSoup
from selenium import webdriver

os.environ["PATH"] += ":/usr/local/bin/"
driver = webdriver.Chrome()
driver.get("https://www.codacy.com/app/levi.moraesds/SeboMedicao/dashboard")
# time.sleep(3)
# soup = BeautifulSoup(driver.page_source, "html.parser")
# driver.close()


file = open("metricasCodacy.json","w") 

vetor = {}

elements = driver.find_elements_by_css_selector(".project__certification > .box__container")
for element in elements:
	nome = element.find_element_by_tag_name("h6").text
	nome = nome.upper()
	nome = nome.replace(" ", "_")
	valor = element.find_element_by_tag_name("h2").text
	valor = re.sub("\D", "", valor)
	vetor[nome] = valor

driver.close()




file.write(json.dumps(vetor,indent=4))



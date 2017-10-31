import os
import time
import requests
import pymysql
import re
import json
import xml.etree.cElementTree as ET
from bs4 import BeautifulSoup
from selenium import webdriver


os.environ["PATH"] += ":/usr/local/bin/"
driver = webdriver.Chrome()
driver.get("http://localhost:9000/measures/search/?asc=true&cols%5B%5D=metric%3Aalert_status&cols%5B%5D=name&cols%5B%5D=date&cols%5B%5D=metric%3Ancloc&cols%5B%5D=metric%3Aviolations&cols%5B%5D=version&cols%5B%5D=metric%3Acomplexity&cols%5B%5D=metric%3Acoverage&cols%5B%5D=metric%3Acomment_lines_density&cols%5B%5D=metric%3Aduplicated_lines_density&cols%5B%5D=metric%3Acode_smells&cols%5B%5D=metric%3Asqale_index&cols%5B%5D=metric%3Abugs&display=list&pageSize=100&qualifiers%5B%5D=TRK&sort=name")
# time.sleep(3)
soup = BeautifulSoup(driver.page_source, "html.parser")
driver.close()

file = open("metricas.json","w") 

vetor = {}
#Duplicacao de Codigo
#print(soup.select('a[href="/component_measures/metric/duplicated_lines_density?id=org.sonarqube%3Ajava-simple-sq-scanner"]'))
# file.write("VERSION=")
# file.write(soup.find('span', {'id':'m_version'}).text)
# file.write("\n")

vetor['LOC'] = re.sub("\D", "",soup.find('span', {'id':'m_ncloc'}).text)
vetor['COMPLEXIDADE'] = soup.find('span', {'id':'m_complexity'}).text
vetor['COMENTARIOS'] = re.sub("\D", "", soup.find('span', {'id':'m_comment_lines_density'}).text)
vetor['DUPLICACAO'] = re.sub("\D", "",soup.find('span', {'id':'m_duplicated_lines_density'}).text)
vetor['ISSUES'] = soup.find('span', {'id':'m_violations'}).text
vetor['CODE_SMELLS'] = soup.find('span', {'id':'m_code_smells'}).text
vetor['DEBITO_TECNICO'] = soup.find('span', {'id':'m_sqale_index'}).text
vetor['BUGS'] = soup.find('span', {'id':'m_bugs'}).text


file.write(json.dumps(vetor,indent=4))








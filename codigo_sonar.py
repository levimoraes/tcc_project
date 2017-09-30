import os
import time
import requests
import pymysql
from bs4 import BeautifulSoup
from selenium import webdriver

os.environ["PATH"] += ":/usr/local/bin/"
driver = webdriver.Chrome()
driver.get("http://localhost:9000/measures/search/1?asc=true&cols%5B%5D=metric%3Aalert_status&cols%5B%5D=name&cols%5B%5D=version&cols%5B%5D=metric%3Ancloc&cols%5B%5D=metric%3Acode_smells&cols%5B%5D=metric%3Acomplexity&cols%5B%5D=metric%3Acomment_lines_density&cols%5B%5D=metric%3Asqale_index&cols%5B%5D=metric%3Aduplicated_lines_density&display=list&pageSize=100&qualifiers=TRK&sort=name&id=1&edit=true")
time.sleep(3)
soup = BeautifulSoup(driver.page_source, "html.parser")
driver.close()

file = open("metricas.txt","w") 

#Duplicacao de Codigo
#print(soup.select('a[href="/component_measures/metric/duplicated_lines_density?id=org.sonarqube%3Ajava-simple-sq-scanner"]'))
file.write("version=")
file.write(str(soup.select("#m_version")))

file.write("LOC=")
file.write(str(soup.select("#m_ncloc")))
#x,y,z,w = v1.split('<')
file.write("COMPLEXIDADE=")
file.write(str(soup.select("#m_complexity")))

file.write("COMENTARIOS=")
file.write(str(soup.select("#m_comment_lines_density")))

file.write("LINHAS DUPLICADAS=")
file.write(str(soup.select("#m_duplicated_lines_density")))


file.close() 
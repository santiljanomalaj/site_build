
# request part
my_url="https://oporayam.com/"
# uClient=uReq(my_url)
# page_html=uClient.read()
# uClient.close()
headers = {
  "user-agent": "Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Mobile Safari/537.36"
}
page_html=requests.get(my_url, headers = headers)
# html page parser part
page_soup = soup(page_html.content, "html.parser")
content=page_soup.findAll('button')
content.remove(content[0])
print (page_soup)
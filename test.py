import requests
headers = {'User-Agent': 'Mozilla/5.0'}
payload = {'account':'account_name', 'username': 'username', 'password':'password'}
files = {'upload_file': open('file.filetype','rb')}

session = requests.Session()
r = session.post('https://home.textkernel.nl/match/extract.do?useJsonErrorMsg=true',headers=headers,files=files,data=payload)

print(r.body)

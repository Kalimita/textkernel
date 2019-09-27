import requests
headers = {'User-Agent': 'Mozilla/5.0'}
payload = {'account':'tkdemo_ml_cv', 'username': 'behrud_demo', 'password':'.8sT0%Cjc'}
files = {'upload_file': open('cv.docx','rb')}

session = requests.Session()
r = session.post('https://home.textkernel.nl/match/extract.do?useJsonErrorMsg=true',headers=headers,files=files,data=payload)

print(r.body)

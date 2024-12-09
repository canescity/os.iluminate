import os
import sys
import time

#COLORES
rojo = '\033[31;1m'
azul = '\033[34;1m'
verde = '\033[32;1m'
amarillo = '\033[33;1m'
morado = '\033[35;1m'
celeste = '\033[36;1m'
plomo = '\033[30;1m'
close = '\033[0m'

username = 'ILUMINATE'
password = '666'

print(verde)
nick = str(input('WALLY DA MAFIA CITY ★PH★ : '))

def restart():
        ngulang = sys.executable
        os.execl(ngulang, ngulang, *sys.argv)

def main():
        uname = str(input("\n\033[32;1mSUPER USER : \033[32;1m"))
        if uname == username:
                pwd = str(input("\n\033[32;1mHACK SENHA : \033[32;1m"))

                if pwd == password:
                        os.system("")
                        time.sleep(2)
                        os.system ("")
                        time.sleep(2)
                        sys.exit()

                else:
                        os.system("")
                        print("\n\033[1;31mLO SIENTO" , nick, " INGRESASTE UNA CONTRASEÑA INCORRECTA !!!\033[00m")
                        print(azul, "NO SABES LA CONTRASEÑA COMUNICATE CON @REALHACKRH593 (Telegram)")
                        time.sleep(3.3)
                        os.system("clear")
                        restart()

        else:
                os.system("clear")
                print("\n\033[1;31mLO SIENTO " , nick, " INGRESASTE UN USUARIO INCORRECTO !!!\033[00m")
                print(azul, "\nSI NO SABES EL USUARIO COMUNICATE CON @REALHACKRH593")
                time.sleep(3.3)
                os.system("clear")
                restart()

try:
        main()
except KeyboardInterrupt:
        os.system('clear')
        restart()

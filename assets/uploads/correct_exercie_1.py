# Full correct exo 1: 
sexe = input("Choisir votre sexe(M/F) :").lower()
age = int(input("Entrer votre age : "))

if (sexe == "m" and  age>20):
  print("Imposable")
elif (sexe == "f" and (age > 18 and age < 35)):
  print("Imposable")
else :
  print("Non imposable")

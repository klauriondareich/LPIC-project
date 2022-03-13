# Semi correct exo 1: 
sexe = input("Choisir votre sexe(M/F) :").lower()
age = int(input("Entrer votre age : "))

if (sexe == "m" and  age>20):
  print("Imposable")
elif (sexe == "f" and (age >= 18 and age < 40)): # Erreur ici ce n'est pas ce qui a été demandé: 
  print("Imposable")
else :
  print("Non imposable")

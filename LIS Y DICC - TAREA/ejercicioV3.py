#se le pide al usuario que ingrese 7 numeros
numeros = []
for i in range(7):
    num = float(input(f"Ingrese el numero {i+1}:"))
    numeros.append(num)

#s calcula el numero mayor 
mayor = max(numeros)
print("El numero mayor es:", mayor)
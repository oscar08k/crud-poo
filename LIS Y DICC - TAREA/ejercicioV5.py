#se le pide al usuario ingresar 6 numeros 
numeros = []
for i in range(6):
    num = float(input(f"Ingrese el numero {i+1}: "))
    numeros.append(num)

#se invierte el vector
invertido = numeros[::-1]
print("El vector invertido es:", invertido)
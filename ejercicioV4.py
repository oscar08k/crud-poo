#se le pide al usuario que ingrese 8 numeros
numeros = []
for i in range(8):
    num = float(input(f"Ingrese el numero {i+1}: "))
    numeros.append(num)

#Se cuentan los numeros positivos
positivos = len([num for num in numeros if num > 0])
print("La cantidad de numeros positivos es:", positivos)
import json
import mysql.connector

# Fonction pour se connecter à la base de données MySQL
def connectDB():
    try:
        conn = mysql.connector.connect(
            host='localhost',
            user='root',
            password='',
            database='projetPhpJs'
        )
        return conn
    except mysql.connector.Error as err:
        print("Erreur de connexion à la base de données:", err)
        return None

# Fonction pour insérer les données JSON dans la base de données
def insertDataFromJSON(jsonFile):
    try:
        # Charger les données JSON à partir du fichier
        with open(jsonFile, 'r') as file:
            data_list = json.load(file)

        # Connexion à la base de données
        conn = connectDB()
        if conn is None:
            return

        cursor = conn.cursor()

        for data in data_list:
            cursor.execute("INSERT INTO weight (id_weight, lb, kg, fk_appearance) VALUES (%s, %s, %s, %s)", 
                (data['id'], data['appearance']['weight'][0], data['appearance']['weight'][1], data['id']))
            conn.commit()
            print("Les données ont été insérées avec succès pour le poids du héros", data['name'])

        # Fermer la connexion à la base de données
        cursor.close()
        conn.close()

    except FileNotFoundError:
        print("Le fichier JSON", jsonFile, "n'a pas été trouvé.")
    except KeyError as e:
        print("La clé", e, "est manquante dans le fichier JSON.")
    except mysql.connector.Error as err:
        print("Erreur lors de l'insertion des données dans la base de données:", err)

# Chemin vers le répertoire contenant les fichiers JSON
json_folder_path = "C:/Users/pret/Downloads/superhero-api-master/api/"

# Liste tous les fichiers JSON dans le répertoire spécifié
import os
json_files = [f for f in os.listdir(json_folder_path) if f.endswith('.json')]

for json_file in json_files:
    insertDataFromJSON(os.path.join(json_folder_path, json_file))

# Projet wordpress

# Installation

se mettre si besoin en navigation privée

```bash
docker-compose up -d
```
go sur http://localhost:8000/wp-admin

suivre les indications

activer le thème 

## pour ubuntu 
aller dans function.scss et vous verrer que la fonction rem est différente de celle de windows
```scss



@function rem($pxVal) {
    @return ($pxVal / 16) * 1rem;
}

```

puis sass --watch ./ESGI-theme/src/main.scss:./ESGI-theme/style.css




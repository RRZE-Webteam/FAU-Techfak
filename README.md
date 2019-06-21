# FAU-Techfak

WordPress-Theme für die Technische Fakultät der Friedrich-Alexander-Universität Erlangen-Nürnberg (FAU)

Eine Dokumentation kann unter https://wordpress.rrze.fau.de  gefunden werden.

## Download 

GITHub-Repo: https://github.com/RRZE-Webteam/FAU-Techfak


## Autor 
RRZE-Webteam , http://www.rrze.fau.de

## Copryright

GNU General Public License (GPL) Version 2 


## Verwendete Libraries und Sourcen

* Font Awesome 4.7 by Dave Gandy - http://fontawesome.io. 
  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
* Font Roboto, https://www.fontsquirrel.com/license/roboto
  Apache License, Version 2.0, January 2004
* Slick Slider v1.9
* Bootstrap 3.3.7, http://getbootstrap.com/



## Feedback

Please use github for submitting new features or bugs:
 https://github.com/RRZE-Webteam/FAU-Einrichtungen/issues

or send an email to 
 webmaster@rrze.fau.de



## Entwickler-Hinweise

### SASS-Compiler

Die CSS Anweisungen werden mittels SASS erzeugt. Hierzu werden im Verzeichnis 
```/css/sass/``` alle notwendigen SASS und SCSS Dateien abgelegt.
Die zentrale CSS-Datei style.css wird bei der SASS-Compilierung im  
Hauptverzeichnis des Themes abgelegt. Die CSS-Datei für das Backend wird 
dagegen im Unterverzeichnis ```/css``` abfelegt.

#### SASS-Watcher:

1. Basis Stylesheet
    Eingabequelle:   ```/css/sass/base.scss```   
    Ausgabeort:  ```/style.css```

2. Sonstiges Styles
    Eingabequelle:  ```/css/sass/```  
    Ausgabeort:     ```/css```

Mit der Compiler-Option ```--style compressed``` soll im produktiven Betrieb die 
erzeugte CSS-Datei komprimiert sein. Source-Map Dateien werden nicht benötigt. 

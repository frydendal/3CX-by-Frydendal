# 3CX by Frydendal

Gratis og open source Joomla 6-modul, der integrerer den officielle 3CX Live Chat-widget på et Joomla-website.

## Status

- Senest JED-godkendte version: **1.0.4**
- Næste vedligeholdelsesversion under test: **1.0.5**
- Distribution: offentlig GitHub Release med versionsspecifik installationspakke
- Udvikler: **FRDNDL by Frydendal**
- Kontakt: [info@frdndl.dk](mailto:info@frdndl.dk)
- Licens: GNU General Public License v2 eller nyere

## Hvad modulet gør

Modulet indsætter 3CX' officielle Live Chat-integration på Joomla-sitet med de to nødvendige værdier fra 3CX:

1. **3CX Phone System URL** – HTTPS-adressen til 3CX-systemet.
2. **3CX Party ID** – Party-identifikatoren fra Live Chat-konfigurationen.

Modulet bruger 3CX' officielle selector-element og eksterne widget-script. Det forsøger ikke at implementere en alternativ chatklient.

## Krav

- Joomla CMS 6.x
- PHP 8.1 eller nyere
- En aktiv 3CX Live Chat-konfiguration
- HTTPS-adresse til 3CX Phone System og korrekt Party ID

## Installation af senest JED-godkendte version

1. Hent [installationspakken til v1.0.4](https://github.com/frydendal/3CX-by-Frydendal/releases/download/v1.0.4/mod_3cxbyfrydendal_v1.0.4.zip).
2. I Joomla: **System → Install → Extensions**.
3. Upload ZIP-filen.
4. Opret et modul af typen **3CX by Frydendal** under **Content → Site Modules**.
5. Indtast 3CX Phone System URL og 3CX Party ID.
6. Publicér modulet, vælg modulposition og menuvisning.
7. Test på de sider, hvor modulet skal vises.

## Joomla Core Update System

Joomla-opdateringsmanifestet ligger i `update/mod_3cxbyfrydendal_update.xml`.

Installationsmanifestet registrerer opdateringsserveren:

```xml
<updateservers>
    <server type="extension" name="3CX by Frydendal">https://raw.githubusercontent.com/frydendal/3CX-by-Frydendal/main/update/mod_3cxbyfrydendal_update.xml</server>
</updateservers>
```

Opdateringsfeedet identificerer modulet med elementet `mod_3cxbyfrydendal`, typen `module` og klienten `site`. Feedets version og downloadadresse skal altid stemme overens med en eksisterende, offentlig GitHub Release.

## v1.0.5 – vedligeholdelsesrelease under test

Version 1.0.5 indeholder en eksplicit `<client>site</client>`-angivelse i update-definitionen og udvidede automatiske valideringer af update-metadata.

**Status:** Ikke JED-godkendt og ikke offentliggjort som produktionsrelease. Den må først annonceres i produktionsfeedet, når ZIP-asset er publiceret og den automatiske opdatering fra 1.0.4 er bestået på Joomla 6.

## Repositorystruktur

- `mod_3cxbyfrydendal/` – Joomla-installationsfiler
- `update/` – Joomla update-XML
- `dist/` – lokalt genererede installationspakker
- `docs/` – installations- og konfigurationsvejledning
- `.github/workflows/` – automatiseret validering af kildekode og XML

## Udvikling og bidrag

Issues kan bruges til fejlrapporter og forslag. Pull requests skal beskrive ændringer og testresultater. Undlad at inkludere personlige oplysninger, credentials eller private 3CX-konfigurationsdata i issues.

## Licens

Projektet distribueres under GNU GPL v2 eller nyere. Se [LICENSE](LICENSE).

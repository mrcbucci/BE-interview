# Obiettivo
Realizzare, in Laravel, un Mini-CRM per la gestione di aziende e dipendenti.

- Autenticazione di base Laravel: possibilità di accedere come amministratore
- Utilizzare i database seed per creare il primo utente con email admin@admin.com e password "password"
- Funzionalità CRUD (Create / Read / Update / Delete) per due elementi di menu: Aziende e Dipendenti
- Struttura delle tabelle nel database:
  - La tabella nel DB per le aziende deve contenere:
    - Nome (obbligatorio)
    - Email
    - Logo (minimo 100x100 pixel)
    - Sito web
  - La tabella nel DB per i dipendenti deve contenere:
    - Nome (obbligatorio)
    - Cognome (obbligatorio)
    - Azienda (foreign key sulla tabella delle aziende)
    - Email
    - Telefono
- Utilizzare le migrazioni per creare le tabelle indicate sopra
- Salvare i loghi delle aziende nella cartella storage/app/public e renderli accessibili all'esterno
- Utilizzare i resource controller di Laravel con i metodi predefiniti (index, create, store, ecc.)
- Applicare la validazione dei dati utilizzando le Request class di Laravel
- Implementare la paginazione di Laravel per mostrare l'elenco di aziende/dipendenti con 10 voci per pagina
- Utilizzare lo starter kit di Laravel per l'autenticazione e il tema di base, ma rimuovere la possibilità di registrarsi

## Criteri di valutazione
La valutazione si baserà sui seguenti aspetti:

1. Qualità del codice
   - Leggibilità, pulizia e manutenibilità
   - Uso di buone pratiche di sviluppo
2. Test
   - Completezza e rilevanza dei test rispetto alle funzionalità richieste
3. Completezza
   - Implementazione di tutte le funzionalità previste
4. Performance
   - Ottimizzazione delle chiamate API e interazioni efficienti
5. Architettura
   - Struttura del progetto ben organizzata

## Istruzioni
1. Clona questo repository
2. Sviluppa la tua soluzione seguendo i requisiti
3. Esegui il commit e il push delle modifiche
4. Condividi il link al tuo repository con il nostro team

## Nota
Hai piena libertà creativa per:

- La grafica
- Le scelte tecniche

Questo progetto è pensato per valutare il tuo approccio allo sviluppo e la tua capacità di affrontare sfide tecniche.

Buon lavoro! 🎉
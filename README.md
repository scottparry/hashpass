# HashPass

### Description
<p>HashPass is a Stateless Password Manager written in PHP.</p>

<p>Using the same input of full name, website & master password, HashPass will always return the same secure password. This means you do not need to store passwords anywhere, ever!</p>

<p>Simply access HashPass whenever you need to recalculate a password.</p>

<p>HashPass uses PBKDF2 with 200,000 iterations for the derivation, hashed with SHA-512, and finally passed through base85. Depending on the master password, generated passwords are between 100 — 128bit entropy.</p>

<p>You can clone and host locally, upload and run it from your own remote server, or you can use the online version.</p>

<p>https://scottparry.co/labs/hashpass/</p>
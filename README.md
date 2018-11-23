# HashPass


## Description
<p>HashPass is a PHP Stateless Password Manager.</p>

<p>Never save passwords again. With the same input of full name, website & master password, HashPass will always return the same password. Simply access HashPass whenever you need to recalculate a password.</p>

<p>Using PBKDF2 with 200,000 iterations for the derivation, hashed with SHA-512, and finally passed through base85. Depending on the master password, generated passwords are between 100 — 128bit entropy.</p>
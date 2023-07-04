<x-inputs-text     name="name"         label="Nombre"   :value="$client->name" required autofocus/>
<x-inputs-email    name="email"        label="Email"    :value="$client->email" />
<x-inputs-text     name="phone"        label="Phone"    :value="$client->phone" />
<x-inputs-submit />
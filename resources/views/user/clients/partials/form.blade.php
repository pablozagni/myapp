<x-inputs-text            name="name"        label="Nombre"      :value="$client->name" required autofocus/>
<x-inputs-email           name="email"       label="Email"       :value="$client->email" />
<x-inputs-text            name="phone"       label="Phone"       :value="$client->phone" />
<x-inputs-select2         name="country_id"  label="Country"     :value="$client->country_id" :options="$CountriesSelector"/>
<x-inputs-select2         name="countries[]" label="Countries"   :value="$client->countries" :options="$CountriesSelector" :multiple="1"/>
<x-inputs-date            name="when"        label="When (date)" :value="$client->when"></x-inputs-date>
<x-inputs-datetime-picker name="datehour"    label="DateHour"    :value="$client->datehour"/>
<x-inputs-textarea        name="obs"         label="Obs"         value="{{ $client->obs }}"></x-inputs-textarea>
<x-inputs-radio           name="status"      label="Status"      :value="$client->status"  :options="$StatusSelector" />
<x-inputs-submit />
# Low6 Technical Test

## The Test Specification

> Hi, one of the functions of our systems is to gather data from sports feeds - for example horse racing, golf stats,
etc. We use this data for a number of purposes in the system and so capturing and making the data available in
different consuming services is valuable.
For the purpose of the code test, we’d like you to consume a data source, persist it and make a service which can
re-present that data, via HTTP requests.
The task is open ended but we don’t want to exercise to be all-consuming. Therefore, you can decide how long you
wish to take, but please let us know how long the activity did take - this is so we can assess how we need to
refine the exercise.
I’ve included an example data source for the purpose of the exercise. Feeds may come from static files or often
from live APIs. In this case please start with the included XML file.
Please consider how you would ensure the service is doing what is needed and expected and also how others would
consume the service.
Ultimately the aim of the service is to be able to present all or part of the data set in a different formats,
against filters, etc.

>Primary datasource:
PA Horse feed
(Attached)

>Alternative Golf API
[Golf Leaderboard API](https://rapidapi.com/sportcontentapi/api/golf-leaderboard-data/)

## PA Horse Feed

```
<HorseRacing timestamp="20210728T110749+0100">
<Meeting id="129250" country="Eire" status="Dormant" date="20210728" course="Galway" revision="1">
<Race id="1043591" date="20210728" time="1635+0100" runners="20" handicap="Yes" showcase="No" trifecta="No" stewards="None" status="Dormant" revision="2">
<Weather> </Weather>
<Going brief=""/>
<Horse id="2496725" name="Dysart Diamond" bred="IRE" status="Runner">
<Cloth number="1"/>
<Weight units="lbs" value="164" text="11st 10lbs"/>
<Jockey id="1177674" name="J B Foley">
<Allowance units="lbs" value="7"/>
</Jockey>
<Trainer id="1171" name="W P Mullins"/>
</Horse>
<Horse id="2300199" name="Ena Baie" bred="FR" status="Runner">
<Cloth number="2"/>
<Weight units="lbs" value="157" text="11st 3lbs"/>
<Jockey id="2837" name="M P Walsh"/>
<Trainer id="59464" name="C O'Dwyer"/>
</Horse>
<Horse id="2235257" name="Make My Heart Fly" bred="IRE" status="Runner">
<Cloth number="3"/>
<Weight units="lbs" value="153" text="10st 13lbs"/>
<Jockey id="1171046" name="J C Gainford">
<Allowance units="lbs" value="5"/>
</Jockey>
<Trainer id="11913" name="Mrs D Foster"/>
</Horse>
<Horse id="2777526" name="Schone Aussicht" bred="GER" status="Runner">
<Cloth number="4"/>
<Weight units="lbs" value="152" text="10st 12lbs"/>
<Jockey id="1161400" name="H Morgan">
<Allowance units="lbs" value="5"/>
</Jockey>
<Trainer id="13695" name="H De Bromhead"/>
</Horse>
<Horse id="2446624" name="Valentina Lady" bred="IRE" status="Runner">
<Cloth number="5"/>
<Weight units="lbs" value="151" text="10st 11lbs"/>
<Jockey id="1162304" name="S F O'Keeffe"/>
<Trainer id="9905" name="P Nolan"/>
</Horse>
<Horse id="2405313" name="Bonarc" bred="IRE" status="Runner">
<Cloth number="6"/>
<Weight units="lbs" value="146" text="10st 6lbs"/>
<Jockey id="1148540" name="P K Donovan">
<Allowance units="lbs" value="7"/>
</Jockey>
<Trainer id="6864" name="J P Ryan"/>
</Horse>
<Horse id="2479197" name="Call Me Dolly" bred="IRE" status="Runner">
<Cloth number="7"/>
<Weight units="lbs" value="146" text="10st 6lbs"/>
<Jockey id="1162845" name="C P McNamara">
<Allowance units="lbs" value="3"/>
</Jockey>
<Trainer id="48807" name="G P Cromwell"/>
</Horse>
<Horse id="2844517" name="Socially Distant" bred="IRE" status="Runner">
<Cloth number="8"/>
<Weight units="lbs" value="146" text="10st 6lbs"/>
<Jockey id="83429" name="B J Cooper"/>
<Trainer id="9905" name="P Nolan"/>
</Horse>
<Horse id="2368781" name="Highstreet Roller" bred="IRE" status="Runner">
<Cloth number="9"/>
<Weight units="lbs" value="144" text="10st 4lbs"/>
<Jockey id="1164516" name="D J O'Keeffe"/>
<Trainer id="58401" name="T Gibney"/>
</Horse>
<Horse id="2358062" name="Fenta Des Obeaux" bred="FR" status="NonRunner">
<Cloth number="10"/>
<Weight units="lbs" value="142" text="10st 2lbs"/>
<Jockey id="1155699" name="J S McGarvey"/>
<Trainer id="57133" name="J J Hanlon"/>
</Horse>
<Horse id="3143976" name="Butterflyvespiere" bred="FR" status="Runner">
<Cloth number="11"/>
<Weight units="lbs" value="141" text="10st 1lbs"/>
<Jockey id="1142598" name="K C Sexton"/>
<Trainer id="74053" name="Peter Fahey"/>
</Horse>
<Horse id="2523179" name="Nodoubtaboutthat" bred="IRE" status="Runner">
<Cloth number="12"/>
<Weight units="lbs" value="141" text="10st 1lbs"/>
<Jockey id="1175074" name="T Joseph Kelly">
<Allowance units="lbs" value="7"/>
</Jockey>
<Trainer id="119917" name="S Crawley"/>
</Horse>
<Horse id="2317417" name="Loudest Whisper" bred="IRE" status="Runner">
<Cloth number="13"/>
<Weight units="lbs" value="139" text="9st 13lbs"/>
<Jockey id="1153994" name="S D Torrens">
<Allowance units="lbs" value="3"/>
</Jockey>
<Trainer id="4052" name="E D Delany"/>
</Horse>
<Horse id="2453003" name="Marvel Fan" bred="FR" status="Runner">
<Cloth number="14"/>
<Weight units="lbs" value="139" text="9st 13lbs"/>
<Jockey id="71933" name="P J Carberry"/>
<Trainer id="5982" name="A J Martin"/>
</Horse>
<Horse id="2832856" name="Powerful Out" bred="IRE" status="Runner">
<Cloth number="15"/>
<Weight units="lbs" value="139" text="9st 13lbs"/>
<Jockey id="38285" name="P T Enright"/>
<Trainer id="1688" name="J E Kiely"/>
</Horse>
<Horse id="2487754" name="Rock Chica" bred="IRE" status="Runner">
<Cloth number="16"/>
<Weight units="lbs" value="139" text="9st 13lbs"/>
<Jockey id="1167411" name="C J Orr"/>
<Trainer id="44360" name="T Mullins"/>
</Horse>
<Horse id="3117078" name="Glory For Molly" bred="IRE" status="Runner">
<Cloth number="17"/>
<Weight units="lbs" value="138" text="9st 12lbs"/>
<Jockey id="1168820" name="G P Brouder">
<Allowance units="lbs" value="5"/>
</Jockey>
<Trainer id="3969" name="M J Tynan"/>
</Horse>
<Horse id="2432300" name="Cottie" bred="IRE" status="Runner">
<Cloth number="18"/>
<Weight units="lbs" value="138" text="9st 12lbs"/>
<Jockey id="1166348" name="M P O'Connor">
<Allowance units="lbs" value="7"/>
</Jockey>
<Trainer id="13695" name="H De Bromhead"/>
</Horse>
<Horse id="2303523" name="Getaway Queen" bred="IRE" status="Runner">
<Cloth number="19"/>
<Weight units="lbs" value="138" text="9st 12lbs"/>
<Jockey id="1148143" name="L P Dempsey"/>
<Trainer id="45030" name="D Budds"/>
</Horse>
<Horse id="2505714" name="Kitty Galore" bred="IRE" status="Runner">
<Cloth number="20"/>
<Weight units="lbs" value="138" text="9st 12lbs"/>
<Jockey id="1144014" name="T Ryan">
<Allowance units="lbs" value="5"/>
</Jockey>
<Trainer id="6864" name="J P Ryan"/>
</Horse>
<Horse id="2285471" name="Flamingo's Court" bred="IRE" status="Runner">
<Cloth number="21"/>
<Weight units="lbs" value="138" text="9st 12lbs"/>
<Jockey id="28041" name="Reserve 1"/>
<Trainer id="126634" name="A McNamara"/>
</Horse>
</Race>
</Meeting>
</HorseRacing>
```

## Time Breakdown For Test

1. Setting up the initial Laravel install, standards packages, docker configuration, and readme - 1 Hour

## Project Setup

For local development, the following will need to be done:

### Generate Local SSL Certificates

First, within your terminal, move to the SSL Certificates directory: `cd docker/nginx/ssl/`

Now run the following command to generate your SSL Certificates

```
openssl req -config openssl.cnf \
-new -sha256 -newkey rsa:2048 -nodes -keyout self-signed.key \
-x509 -days 825 -out self-signed.crt
```

### Copy .env.example

We now need to configure our .env file.  to do this, as there are no private details, copy .env.example to .env in the root directory

```
cp .env.example .env
```

### Starting Docker

The next step is to start up docker.  From the project root directory run the following command

```
docker compose up -d --build
```

This will start up four containers, nginx, php, mysql and redis

NOTE: if you are running on WSL2.0 you may encounter an issue with Docker Compose.  This is a known issue with WSL2.0, and the workaround is simply to change the command slightly:

```
docker-compose up -d --build
```

### Installing Composer, and Seeding The Data

You will now need to execute a small set of commands to get this up and running

```
docker exec -it php bash
composer install
php artisan key:generate
php artisan migrate:fresh
```

### Accessing The Application

You should now have access to the application in your browser.  Visit [https://localhost](https://localhost).  You will get a certification error, for this application it is safe to ignore this.

## Technical Stack Used

* Laravel Version 
* Nginx
* Redis
* Mysql Version
* PHPLinter
* Easy Coding Standards
* PHPStan
* Enlightn
* PHPUnit

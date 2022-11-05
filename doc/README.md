# Horse evaluation 
> **Mathieu Gosse**

## Human

### Abstract Class Human
| Property  | Optional  | Type |
| :------------ |:---------------:| -----:|
| Name      | `false` | string |
| Address      | `false`       |   Address |
#### Methodes
##### __toString(): string
Print informations of the Human
### Class Manager extends Human
| Property  | Optional  | Type |
| :------------ |:---------------:| -----:|
| Stable      | `true` | Stable |
#### Methodes
##### addStable(Stable): self
Add or edit a stable to the Manager
### Class Raider extends Human
| Property  | Optional  | Type |
| :------------ |:---------------:| -----:|
| Equine      | `true` | Equine |
#### Methodes
##### addEquine(Equine): self
Add or edit a equine to the raider

## Animals

### Animals Class
| Property  | Optional  | Type |
| :------------ |:---------------:| -----:|
| Name      | `false` | string |
### Abstract Class Equine
| Property  | Optional  | Type |
| :------------ |:---------------:| -----:|
| Name      | `false` | string |
| Color      | `false` | string |
| Water      | `false` | int |
| Raider      | `false` | Raider |
### Interface EquineType
#### Methodes
##### canDoTheCompetition(String): boolean
Return if the equine is enable or not, to do a competiton
##### canDoTheCompetition(String): string
Retrun the id string

### Class Sheitland extend Equine implement EquineType
| Property  | Optional  | Type |
| :------------ |:---------------:| -----:|
| Id      | `false` | string |
#### Methodes
##### setId(): self
Set the id of the Equine by the Color, Name, and Effectif

## Other

### Address
| Property  | Optional  | Type |
| :------------ |:---------------:| -----:|
| Street      | `false` | string |
| City      | `false` | string |
| Code      | `false` | int |
### Stable
| Property  | Optional  | Type |
| :------------ |:---------------:| -----:|
| Address      | `false` | Address |
| Manager      | `false` | Manager |
### Event
| Property  | Optional  | Type |
| :------------ |:---------------:| -----:|
| Name      | `false` | string |
| Type      | `false` | string |
| Entrants      | `false` | array<Equine> |
#### Methodes
##### setEntrants(array<Equine>): self
Set the Entrants of the event verify the type and if the Equine is enable to do the competiton
##### addEntrant(Equine):self
Set a new Entrant to the event.
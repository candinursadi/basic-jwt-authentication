# Basic JWT Authentication and Simple Transactional

### Login to get Access Token

| Service Name  | Service API |
| ------------- | ------------- |
| login | {{baseUrl}}/login  |

**Request (POST) :**
``` 
{
    "email" : "rtromp@example.net",
    "password" : "123123"
}
```

**Response Success :**
``` 
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvbG9naW4iLCJpYXQiOjE2Mjg5NDQ2NTIsImV4cCI6MTYyODk0ODI1MiwibmJmIjoxNjI4OTQ0NjUyLCJqdGkiOiJpRlNZZGg4UFEzbUVSZDFJIiwic3ViIjoyLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.C2UmeQl2T7VGb4BfEfnGFlxCRDs5KHFMEciD8sC-UJI",
    "token_type": "bearer",
    "expires_in": 3600
}
```

### Get Transactions List

| Service Name  | Service API |
| ------------- | ------------- |
| transactions | {{baseUrl}}/transactions  |

**Request :**
``` 
GET /transactions HTTP/1.1
Host: localhost:8000
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvbG9naW4iLCJpYXQiOjE2Mjg5NDIwNzYsImV4cCI6MTYyODk0NTY3NiwibmJmIjoxNjI4OTQyMDc2LCJqdGkiOiJWWjJDZUM1Ymc2bjEzd25SIiwic3ViIjoyLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.3lyT_w1yHWBeMCSSPUGE00VfT-Kr2sdsCtGFkgc-Gmc
```

**Response Success :**
``` 
{
    "code": "00",
    "message": "Success",
    "links": {
        "self": "/transactions?page=1"
    },
    "data": [
        {
            "id": 12,
            "uid": "3dc8a65d-fcfb-11eb-93f2-00ff1035177d",
            "user_id": 2,
            "device_timestamp": "2021-08-14 19:29:16",
            "total_amount": 1799,
            "paid_amount": 9957,
            "change_amount": 8158,
            "payment_method": "cash",
            "created_at": "2021-08-14T12:29:16.000000Z",
            "updated_at": "2021-08-14T12:29:16.000000Z",
            "deleted_at": null
        },
        {
            "id": 10,
            "uid": "3dc7f59b-fcfb-11eb-93f2-00ff1035177d",
            "user_id": 2,
            "device_timestamp": "2021-08-14 19:29:16",
            "total_amount": 1289,
            "paid_amount": 9218,
            "change_amount": 7929,
            "payment_method": "cash",
            "created_at": "2021-08-14T12:29:16.000000Z",
            "updated_at": "2021-08-14T12:29:16.000000Z",
            "deleted_at": null
        },
    ]
}
```

### Get Transactions Detail

| Service Name  | Service API |
| ------------- | ------------- |
| transactions.detail | {{baseUrl}}/transactions/{{id}}  |

**Request :**
``` 
GET /transactions HTTP/1.1
Host: localhost:8000
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvbG9naW4iLCJpYXQiOjE2Mjg5NDIwNzYsImV4cCI6MTYyODk0NTY3NiwibmJmIjoxNjI4OTQyMDc2LCJqdGkiOiJWWjJDZUM1Ymc2bjEzd25SIiwic3ViIjoyLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.3lyT_w1yHWBeMCSSPUGE00VfT-Kr2sdsCtGFkgc-Gmc
```

**Response Success :**
``` 
{
    "code": "00",
    "message": "Success",
    "data": {
        "user_id": 2,
        "transaction_at": "2021-08-14T10:21:36.000000Z",
        "total_amount": 3129,
        "paid_amount": 9545,
        "change_amount": 6416,
        "payment_method": "card",
        "items": [
            {
                "id": 4,
                "uid": "682d680e-fce9-11eb-93f2-00ff1035177d",
                "transaction_id": 3,
                "title": "inventore",
                "qty": 1,
                "price": 1374,
                "created_at": "2021-08-14T10:21:37.000000Z",
                "updated_at": "2021-08-14T10:21:37.000000Z",
                "deleted_at": null
            },
            {
                "id": 27,
                "uid": "3dcd8903-fcfb-11eb-93f2-00ff1035177d",
                "transaction_id": 3,
                "title": "sit",
                "qty": 8,
                "price": 1566,
                "created_at": "2021-08-14T12:29:16.000000Z",
                "updated_at": "2021-08-14T12:29:16.000000Z",
                "deleted_at": null
            }
        ]
    }
}
```

### Create Transactions

| Service Name  | Service API |
| ------------- | ------------- |
| transactions.store | {{baseUrl}}/transactions  |

**Request :**
``` 
POST /transactions HTTP/1.1
Host: localhost:8000
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvbG9naW4iLCJpYXQiOjE2Mjg5NDQ2NTIsImV4cCI6MTYyODk0ODI1MiwibmJmIjoxNjI4OTQ0NjUyLCJqdGkiOiJpRlNZZGg4UFEzbUVSZDFJIiwic3ViIjoyLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.C2UmeQl2T7VGb4BfEfnGFlxCRDs5KHFMEciD8sC-UJI
Content-Type: application/json
Content-Length: 299

{
    "paid_amount" : 10000,
    "payment_method" : "cash",
    "items" : [
        {
            "title" : "kopi",
            "qty" : 2,
            "price" : 2000
        },
        {
            "title" : "susu",
            "qty" : 1,
            "price" : 3000
        }
    ]
}
```

**Response Success :**
``` 
{
    "code": "00",
    "message": "Success",
    "user_id": 2,
    "transaction_at": "2021-08-14T12:48:20.000000Z",
    "total_amount": 7000,
    "paid_amount": 10000,
    "change_amount": 3000,
    "payment_method": "cash",
    "items": [
        {
            "title": "kopi",
            "qty": 2,
            "price": 2000
        },
        {
            "title": "susu",
            "qty": 1,
            "price": 3000
        }
    ]
}
```

### Update Transactions

| Service Name  | Service API |
| ------------- | ------------- |
| transactions.update | {{baseUrl}}/transactions/{{id}}  |

**Request :**
``` 
PUT /transactions HTTP/1.1
Host: localhost:8000
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvbG9naW4iLCJpYXQiOjE2Mjg5NDQ2NTIsImV4cCI6MTYyODk0ODI1MiwibmJmIjoxNjI4OTQ0NjUyLCJqdGkiOiJpRlNZZGg4UFEzbUVSZDFJIiwic3ViIjoyLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.C2UmeQl2T7VGb4BfEfnGFlxCRDs5KHFMEciD8sC-UJI
Content-Type: application/json
Content-Length: 299

{
    "paid_amount" : 15000,
    "payment_method" : "cash",
    "items" : [
        {
            "title" : "kopi",
            "qty" : 2,
            "price" : 2000
        },
        {
            "title" : "susu",
            "qty" : 3,
            "price" : 3000
        }
    ]
}
```

**Response Success :**
``` 
{
    "code": "00",
    "message": "Success",
    "user_id": 2,
    "transaction_at": "2021-08-14T12:48:20.000000Z",
    "total_amount": 13000,
    "paid_amount": 15000,
    "change_amount": 2000,
    "payment_method": "cash",
    "items": [
        {
            "title": "kopi",
            "qty": 2,
            "price": 2000
        },
        {
            "title": "susu",
            "qty": 3,
            "price": 3000
        }
    ]
}
```

### Delete Transactions

| Service Name  | Service API |
| ------------- | ------------- |
| transactions.destroy | {{baseUrl}}/transactions/{{id}}  |

**Request :**
``` 
DELETE /transactions HTTP/1.1
Host: localhost:8000
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvbG9naW4iLCJpYXQiOjE2Mjg5NDQ2NTIsImV4cCI6MTYyODk0ODI1MiwibmJmIjoxNjI4OTQ0NjUyLCJqdGkiOiJpRlNZZGg4UFEzbUVSZDFJIiwic3ViIjoyLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.C2UmeQl2T7VGb4BfEfnGFlxCRDs5KHFMEciD8sC-UJI
Content-Type: application/json
Content-Length: 299
```

**Response Success :**
``` 
{
    "code": "00",
    "message": "Success"
}
```

## Note

To run it, please get the basic crud transactional repository first, link below:

``` 
https://github.com/candinursadi/basic-transactional-crud
```

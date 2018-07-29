# GoogleSignIn
### Version 1.0

GoogleSign-In is a plugin for SuiteCRM

This plugin provides log in functionality using existing google credential rather than creating separate login credential for CRM.

Before moving further, first we need to configure a project in Google Developer console. This is a one time activity. Once you register your project, you'll get **Client ID** and **Client Secret** and those details need to be saved in CRM.

Once you saved those details, then you'll get to see the ***Sign in With Google*** button on login screen. Before logging in using google credentials, kindly make sure that your google email address is stored as the CRM user's primary email address.

## DEMO

![LOGIN SCREEN](https://raw.githubusercontent.com/changezkhan/crm/master/google_login.gif)

#### Installing the Add-on

The ONLY step

Install plug-in using Module Loader, Admin > Module Loader.

![Install GoogleSignIn](https://raw.githubusercontent.com/changezkhan/crm/master/2.JPG)

#### Usage

After installation, you'll get to see the link on **admin** section under *Developer Tools*.

![Link to GoogleSignI](https://raw.githubusercontent.com/changezkhan/crm/master/3.JPG)

After selecting Google Sign-In, you'll get to see the following window

![GoogleSignIn](https://raw.githubusercontent.com/changezkhan/crm/master/4.JPG)

Insert *Client ID* and *Client Secret* and save the details.

And, that's it.

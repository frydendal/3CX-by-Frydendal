# 3CX by Frydendal 1.0.5

## Purpose
Maintenance release focused on Joomla core update discovery for the frontend Site module.

## Changes
- Bump the extension version from 1.0.4 to 1.0.5.
- Explicitly declare `<client>site</client>` in the Joomla update feed. Joomla requires the client value for module update matching; without it, a frontend module update can be interpreted as an administrator module update and therefore not match the installed extension.
- Keep the install manifest version and update-feed version synchronized.
- Extend CI validation to assert the module client, update-feed client, element, type, version and release download URL.
- No changes to the 3CX Live Chat rendering, configuration fields or external 3CX widget integration.

## Release publication order
1. Upload `mod_3cxbyfrydendal_v1.0.5.zip` as the asset on GitHub Release tag `v1.0.5`.
2. Verify that the asset is publicly downloadable.
3. Publish `update/mod_3cxbyfrydendal_update.xml` from this release branch to the production branch.
4. Verify the raw update XML is publicly accessible and well-formed.
5. Test Joomla's update discovery and in-place upgrade from 1.0.4 to 1.0.5 on a Joomla 6 test site.

Do not merge/publish the update feed before step 1; otherwise Joomla would be offered a release whose download asset does not yet exist.

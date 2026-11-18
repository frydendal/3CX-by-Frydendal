# 3CX by Frydendal 1.0.5

## Release context
Version 1.0.4 has now been approved by the Joomla Extensions Directory (JED). It remains the latest JED-approved release.

Version 1.0.5 is the next maintenance release and has not yet been submitted to or approved by JED.

## Changes
- Bump the extension version from 1.0.4 to 1.0.5.
- Explicitly declare `<client>site</client>` in the Joomla update feed.
- Keep the install manifest version and update-feed version synchronized.
- Extend CI validation to assert the module client, update-feed client, element, type, version and release download URL.
- No intended changes to 3CX Live Chat rendering, configuration fields or external 3CX widget integration.

## Release publication and validation gates
1. Publish `mod_3cxbyfrydendal_v1.0.5.zip` as the asset on GitHub Release tag `v1.0.5`.
2. Verify that the asset is publicly downloadable.
3. Publish the v1.0.5 update feed only after the release asset is available.
4. Verify the raw update XML is publicly accessible and well-formed.
5. Test Joomla's update discovery and in-place upgrade from 1.0.4 to 1.0.5 on a Joomla 6 test site.
6. Confirm that the module settings remain intact and the 3CX widget still loads.
7. Run JED Checker against the exact v1.0.5 ZIP before submitting it to JED.

Do not advertise v1.0.5 as the production update until all relevant publication and Joomla 6 upgrade tests have passed.

#!/bin/sh
REL="REL1_41"
#SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )

# install extesions
cd /var/www/html/extensions
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/ExternalData
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/LookupUser
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/Cargo
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/PageForms
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/VEForAll
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/DarkMode
#git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/MultimediaViewer
#git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/TemplateData
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/TemplateStyles
#git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/VisualEditor
#cd VisualEditor
#git submodule update --init
#cd ..
#git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/Cite
#git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/Scribunto
#git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/ParserFunctions
#git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/CategoryTree
#git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/Gadgets
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/PluggableAuth
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/OpenIDConnect
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/UserMerge
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/CSS
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/Popups
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/HeaderTabs
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/PageNotice
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/UserFunctions
#git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/InputBox
#git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/PdfHandler
#git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/WikiEditor
#git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/CodeEditor
git clone --depth 1 -b $REL https://gerrit.wikimedia.org/r/mediawiki/extensions/RegexFunctions
git clone https://github.com/peripteraptos/ICalCalendar.git

# install skins
cd /var/www/html/skins
#git clone -b $REL https://phabricator.wikimedia.org/diffusion/SVEC/Vector
#git clone -b $REL https://phabricator.wikimedia.org/diffusion/SMIN/MinervaNeue

# run composer update
cd /var/www/html
cp composer.local.json-sample composer.local.json
composer update --no-dev

# Apply some patches
#git apply $SCRIPT_DIR/patches/PageForms_quickfix.patch
